# ddnet-web

## Cloning

To clone this repository with full history (~350 MiB):

```bash
git clone https://github.com/ddnet/ddnet-web
```

## Dependencies

The website uses [Ruby](https://www.ruby-lang.org) with [Jekyll](https://jekyllrb.com) static site generator.

Follow the official installation guide for Ruby [here](https://www.ruby-lang.org/en/documentation/installation).

After that, install Jekyll:

```
gem install bundler jekyll
```

Navigate to the directory and start the local server:

```
cd www
jekyll serve
```

By default, the website will be served on http://127.0.0.1:4000.

Note: Many pages will not work locally because they require PHP or must be built using specific scripts from the [ddnet-scripts](https://github.com/ddnet/ddnet-scripts) repository.
