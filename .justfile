default:
    @just --list
compile:
    grass ./scss/custom.scss ./style.css
minify:
    mv ./style.css ./style.css.tmp
    csso -i ./style.css.tmp -o ./css/style.css
    rm ./style.css.tmp
all:
    @just --justfile {{justfile()}} compile minify
sync:
    scp ./css/style.min.css co1:docker/webdav/share/style.css

