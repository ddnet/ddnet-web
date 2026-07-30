#!/usr/bin/env python3

import argparse
import json
import re
import sys
import urllib.error
import urllib.parse
import urllib.request
from datetime import date as date_type
from pathlib import Path

data_file = Path(__file__).parent / "www" / "_data" / "videos.yml"


def find_id(text):
    if re.fullmatch(r"[A-Za-z0-9_-]{11}", text):
        return text
    match = re.search(r"(?:v=|youtu\.be/|embed/|shorts/)([A-Za-z0-9_-]{11})", text)
    if match:
        return match.group(1)
    return None


def load_metadata(video_id):
    url = "https://www.youtube.com/oembed?" + urllib.parse.urlencode(
        {"url": f"https://www.youtube.com/watch?v={video_id}", "format": "json"}
    )
    request = urllib.request.Request(url, headers={"User-Agent": "Mozilla/5.0"})
    with urllib.request.urlopen(request, timeout=15) as response:
        return json.load(response)


def quote(text):
    return '"' + text.replace("\\", "\\\\").replace('"', '\\"') + '"'


def main():
    parser = argparse.ArgumentParser(
        description="Feature a video on the frontpage and add it to /media/."
    )
    parser.add_argument("video", help="YouTube video id or url")
    parser.add_argument(
        "--date",
        default=date_type.today().isoformat(),
        help="date it gets featured, defaults to today",
    )
    parser.add_argument("--title", help="override the title from YouTube")
    parser.add_argument("--author", help="override the channel name from YouTube")
    args = parser.parse_args()

    video_id = find_id(args.video)
    if not video_id:
        sys.exit(f"could not read a video id out of {args.video!r}")

    lines = data_file.read_text(encoding="utf-8").splitlines()
    if any(line.strip() == f"- id: {video_id}" for line in lines):
        sys.exit(f"{video_id} is already in {data_file.name}")

    title = args.title
    author = args.author
    if title is None or author is None:
        try:
            metadata = load_metadata(video_id)
        except urllib.error.HTTPError as error:
            if error.code in (401, 403, 404):
                sys.exit(f"{video_id} is not publicly available on YouTube")
            raise
        title = title if title is not None else metadata.get("title", "")
        author = author if author is not None else metadata.get("author_name", "")

    entry = [
        f"- id: {video_id}",
        f"  date: {args.date}",
        f"  title: {quote(title)}",
        f"  author: {quote(author)}",
    ]

    # newest first, so the entry goes above the first existing one
    insert_at = next(
        (n for n, line in enumerate(lines) if line.startswith("- id: ")), len(lines)
    )
    lines[insert_at:insert_at] = entry
    data_file.write_text("\n".join(lines) + "\n", encoding="utf-8")

    print(f"added {video_id} to {data_file}")
    print(f"  {title} by {author}, featured {args.date}")


if __name__ == "__main__":
    main()
