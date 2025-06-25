FROM debian:bookworm
RUN apt-get update && apt-get install -y \
  curl unzip php-cli php-curl php-intl php-mbstring php-xml \
  php-zip php-gd php-mysql zsh sudo mariadb-server mariadb-client
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN groupadd -g 1000 vscode && \
    useradd -m -u 1000 -g 1000 -s /usr/bin/zsh -d /home/vscode vscode && \
    chown -R vscode:vscode /home/vscode && |
    chsh -s /user/bin/zsh vscode
RUN rm -rf /var/lib/apt/lists/*
USER vscode
