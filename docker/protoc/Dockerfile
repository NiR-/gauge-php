FROM debian:8

ENV PROTOBUF_VERSION=3.1.0
RUN apt-get update \
    && apt-get install -y unzip wget \
    && wget https://github.com/google/protobuf/releases/download/v${PROTOBUF_VERSION}/protoc-${PROTOBUF_VERSION}-linux-x86_64.zip \
    && unzip protoc-${PROTOBUF_VERSION}-linux-x86_64.zip

WORKDIR /php
