#!/usr/bin/env python3
"""docs_new の HTML ファイルに include をインライン化するビルドスクリプト。

使い方:
  cd docs_new
  python build_docs.py

出力先: docs_new/dist/ （元のファイルは変更しません）
"""

import os
import re
import shutil

SCRIPT_DIR = os.path.dirname(os.path.abspath(__file__))
INCLUDE_DIR = os.path.join(SCRIPT_DIR, "include")
DIST_DIR = os.path.join(SCRIPT_DIR, "dist")
SRC_DIRS = [SCRIPT_DIR, os.path.join(SCRIPT_DIR, "features")]


def load_include(name: str) -> str:
    """include/{name}.html を読み込む"""
    path = os.path.join(INCLUDE_DIR, f"{name}.html")
    if not os.path.exists(path):
        print(f"  [WARN] include not found: {path}")
        return f"<!-- include {name}.html not found -->"
    with open(path, "r", encoding="utf-8") as f:
        return f.read()


def build_file(src_path: str, rel_dir: str):
    """1つの HTML ファイルをビルドする"""
    with open(src_path, "r", encoding="utf-8") as f:
        html = f.read()

    # data-include を処理
    def replace_include(match):
        el_attrs = match.group(1)  # data-include="..." data-title="..."

        # data-include の値を抽出
        include_match = re.search(r'data-include="([^"]+)"', el_attrs)
        if not include_match:
            return match.group(0)
        include_name = include_match.group(1)
        # data-include は "include/sidebar" 形式 → "sidebar" に変換
        if include_name.startswith("include/"):
            include_name = include_name[len("include/"):]

        # data-title の値を抽出
        title_match = re.search(r'data-title="([^"]*)"', el_attrs)
        title = title_match.group(1) if title_match else ""

        content = load_include(include_name)

        # プレースホルダー置換
        if title:
            content = content.replace("{{PAGE_TITLE}}", title)
        content = content.replace("ROOT/", rel_dir + "/")

        return content

    pattern = r'<div\s+([^>]*data-include="[^"]*"[^>]*)>\s*</div>'
    html = re.sub(pattern, replace_include, html)

    # 出力先パス
    rel_path = os.path.relpath(src_path, SCRIPT_DIR)
    dst_path = os.path.join(DIST_DIR, rel_path)
    os.makedirs(os.path.dirname(dst_path), exist_ok=True)

    with open(dst_path, "w", encoding="utf-8") as f:
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

    # HTML ファイルをビルド
    html_files = []
    for src_dir in SRC_DIRS:
        for f in sorted(os.listdir(src_dir)):
            if f.endswith(".html"):
                html_files.append(os.path.join(src_dir, f))

    print(f"\nBuilding {len(html_files)} HTML files...\n")
    for fp in html_files:
        build_file(fp, ".." if "features" in fp else ".")

    print(f"\n✅ 完了! 出力先: {DIST_DIR}")
    print("   dist/ フォルダをブラウザで開いてください。")


if __name__ == "__main__":
    main()
