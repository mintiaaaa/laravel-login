# AWS ドキュメント - AWS CLI のインストール
# https://docs.aws.amazon.com/ja_jp/cli/latest/userguide/cli-chap-install.html

FROM python:3.6

ARG pip_installer="https://bootstrap.pypa.io/get-pip.py"
ARG awscli_version="1.16.251"

# create local bin directory
RUN mkdir -p /root/.local/bin
ENV PATH $PATH:/root/.local/bin

# install aws-cli
RUN pip install --user --upgrade awscli==${awscli_version}

# install sam
RUN pip install --user --upgrade aws-sam-cli

# install command.
RUN apt-get update && apt-get install -y less vim

WORKDIR /root