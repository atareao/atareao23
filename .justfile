dir := "${PWD##*/}"
default:
    @just --list
sync:
    rsync --archive \
          --verbose \
          --human-readable \
          --delete \
          --exclude '.git' \
          --exclude '.justfile' \
          ../{{dir}}/ co1:docker/wpap/html/wp-content/themes/{{dir}}
zip:
    #zip -r  "${PWD##*/}".zip rester/* -x rester/.git
    echo {{ dir }}
    zip -r "../{{dir}}.zip" ./* -x ./.git

