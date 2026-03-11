FROM nginx:1.29 AS nginx-base

WORKDIR /app/

RUN groupadd --gid 1000 app-user  && \
    useradd --uid 1000 --gid app-user --shell /bin/bash --create-home app-user

FROM nginx-base AS nginx-dev

CMD ["nginx-debug", "-g", "daemon off;"]
