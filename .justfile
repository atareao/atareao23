base-styles:
    #!/usr/bin/env bash
    cd sass/base/@wordpress/base-styles/
    wget https://github.com/WordPress/gutenberg/archive/refs/heads/trunk.zip
    while read -r filename; do unzip -o -j trunk.zip "$filename"; done < <(unzip -Z1 trunk.zip| grep base-styles | grep scss)
    rm -rf trunk.zip

compile-sass:
    grass ./sass/ponyfill.scss > ./assets/ponyfill.css

deploy:
    ansible-playbook -i co1, .playbook.yml
