#!/usr/bin/env python3
"""PHP ページの include をインライン化し、静的プレビュー用の dist/ を生成するビルドスクリプト。

使い方:
  cd cultivate
  python build_docs.py

出力先: dist/ （元のファイルは変更しません）

各ページは PHP の include で共通パーツを読み込み、`$ROOT` / `$PAGE_TITLE` 変数で
プレースホルダー（サイドバーの `ROOT/` とトップバーの `{{PAGE_TITLE}}`）を解決します。
このスクリプトはその include を展開し、変数を実値に置換します。
CSS/JS のキャッシュ破棄用 PHP タグは、dist/ 内の該当ファイルの更新日時（数値）に置換します。
"""

import os
import re
import shutil

SCRIPT_DIR = os.path.dirname(os.path.abspath(__file__))
INCLUDE_DIR = os.path.join(SCRIPT_DIR, "include")
DIST_DIR = os.path.join(SCRIPT_DIR, "dist")
SRC_DIRS = [SCRIPT_DIR, os.path.join(SCRIPT_DIR, "features")]


MTIME_TAG_RE = re.compile(r"<\?= @filemtime\(__DIR__ \. '/([^']+)'\) \?: time\(\) \?>")

# ページ先頭で定義する変数ブロック
PAGE_VARS_RE = re.compile(
    r"<\?php\s+\$ROOT = '([^']*)';\s*\$PAGE_TITLE = '([^']*)';\s*\?>"
)
# <?php include __DIR__ . '/include/sidebar.php'; ?>
INCLUDE_RE = re.compile(r"<\?php\s+include __DIR__ \. '[^']*?include/(\w+)\.php';\s*\?>")
# include パーツ内の変数参照
ROOT_TOKEN = "<?= $ROOT ?? '.' ?>"
TITLE_TOKEN = "<?= $PAGE_TITLE ?? '' ?>"


def load_include(name: str) -> str:
    """include/{name}.php を読み込む"""
    path = os.path.join(INCLUDE_DIR, f"{name}.php")
    if not os.path.exists(path):
        print(f"  [WARN] include not found: {path}")
        return f"<!-- include {name}.php not found -->"
    with open(path, "r", encoding="utf-8") as f:
        return f.read()


def resolve_cache_busting(html: str, dst_path: str) -> str:
    """dist 出力では PHP タグを静的値に置換し、ブラウザで直接開けるようにする"""
    page_dir = os.path.dirname(dst_path)

    def repl(match):
        target = os.path.normpath(os.path.join(page_dir, match.group(1)))
        if os.path.exists(target):
            return str(int(os.path.getmtime(target)))
        return "0"

    return MTIME_TAG_RE.sub(repl, html)


def build_file(src_path: str):
    """1つの PHP ページをビルドする"""
    with open(src_path, "r", encoding="utf-8") as f:
        html = f.read()

    # ページ先頭の変数（$ROOT / $PAGE_TITLE）を取り出す
    vars_match = PAGE_VARS_RE.search(html)
    root = vars_match.group(1) if vars_match else "."
    title = vars_match.group(2) if vars_match else ""
    html = PAGE_VARS_RE.sub("", html, count=1)

    # PHP include をインライン展開し、変数を実値に置換
    def replace_include(match):
        content = load_include(match.group(1))
        content = content.replace(ROOT_TOKEN, root)
        content = content.replace(TITLE_TOKEN, title)
        return content

    html = INCLUDE_RE.sub(replace_include, html)

    # 出力先パス
    rel_path = os.path.relpath(src_path, SCRIPT_DIR)
    dst_path = os.path.join(DIST_DIR, rel_path)

    # PHP タグを静的値へ置換（dist をブラウザで直接開けるようにする）
    html = resolve_cache_busting(html, dst_path)

    # 未展開の PHP が残っていないか確認
    if "<?php" in html or "<?=" in html:
        print(f"  [WARN] 未展開の PHP タグが残っています: {rel_path}")

    os.makedirs(os.path.dirname(dst_path), exist_ok=True)

    with open(dst_path, "w", encoding="utf-8", newline="") as f:
        f.write(html)

    print(f"  ✓ {rel_path}")


def main():
    # dist をクリーン
    if os.path.exists(DIST_DIR):
        shutil.rmtree(DIST_DIR)

    # CSS/JS をコピー
    for item in ["css", "js"]:
        src = os.path.join(SCRIPT_DIR, item)
        dst = os.path.join(DIST_DIR, item)
        if os.path.exists(src):
            shutil.copytree(src, dst)
            print(f"  ✓ copied {item}/")

    # PHP ページをビルド
    html_files = []
    for src_dir in SRC_DIRS:
        for f in sorted(os.listdir(src_dir)):
            if f.endswith(".php"):
                html_files.append(os.path.join(src_dir, f))

    print(f"\nBuilding {len(html_files)} PHP pages...\n")
    for fp in html_files:
        build_file(fp)

    print(f"\n✅ 完了! 出力先: {DIST_DIR}")
    print("   dist/ フォルダをブラウザで開いてください。")


if __name__ == "__main__":
    main()
