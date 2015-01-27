cd $(dirname $0)

err()
{
  echo "ERROR $1"
  exit 1
}

rpl()
{
  echo "$1" | sed 's/[]\/$*.^&|[]/\\&/g'
}

get_skinname_pos()
{
  pos=$1
  [ $pos -lt 1 -o $pos -gt 3 ] && err "get_skinname: need pos 1 to 3"
  echo "$(sed -n "s/^$(rpl "$skinname")\/\(.*\)\/\(.*\)\/\(.*\)$/\\$pos/p" data.txt)"
}
