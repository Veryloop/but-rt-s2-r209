user := $(shell id -u)
group := $(shell id -g)

.PHONY: dev
dev:
	USER_ID=$(user) GROUP_ID=$(group) docker-compose run --rm node npx slidev --remote

sh:
	USER_ID=$(user) GROUP_ID=$(group) docker-compose run --rm node /bin/sh