#!/bin/bash

DEVDIR="web/app/uploads/"
DEVSITE="ixn.test"

PRODDIR="web@ixn.org.uk:/srv/www/ixn.org.uk/current/web/app/uploads/"
PRODSITE="ixn.org.uk"

FROM=$1
TO=$2

case "$1-$2" in
  dev-prod) DIR="up";  FROMSITE=$DEVSITE;  FROMDIR=$DEVDIR;  TOSITE=$PRODSITE; TODIR=$PRODDIR; ;;
  dev-stage)    DIR="up"   FROMSITE=$DEVSITE;  FROMDIR=$DEVDIR;  TOSITE=$STAGSITE; TODIR=$STAGDIR; ;;
  prod-dev) DIR="down" FROMSITE=$PRODSITE; FROMDIR=$PRODDIR; TOSITE=$DEVSITE;  TODIR=$DEVDIR; ;;
  stage-dev)    DIR="down" FROMSITE=$STAGSITE; FROMDIR=$STAGDIR; TOSITE=$DEVSITE;  TODIR=$DEVDIR; ;;
  *) echo "usage: $0 dev prod | dev stage | prod dev | prod stage" && exit 1 ;;
esac

read -r -p "Sync the uploads folder? [y/N] " uploads

cd ../ &&
if [[ "$uploads" =~ ^([yY][eE][sS]|[yY])$ ]]; then
  rsync -az --progress "$FROMDIR" "$TODIR"
fi
