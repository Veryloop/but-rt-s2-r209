user := $(shell id -u)
group := $(shell id -g)

.PHONY: dev
dev:
	USER_ID=$(user) GROUP_ID=$(group) docker-compose run --rm node npx slidev --remote

sh:
	USER_ID=$(user) GROUP_ID=$(group) docker-compose run --rm node /bin/sh

yarn:
	USER_ID=$(user) GROUP_ID=$(group) docker-compose run --rm node yarn

pdf:
	USER_ID=$(user) GROUP_ID=$(group) docker-compose run --rm node npx slidev export

spa:
	USER_ID=$(user) GROUP_ID=$(group) docker-compose run --rm node npx slidev build

ct:
	docker build . -t maximechartier/but-rt-s2-r209:latest

ctrun:
	docker run --rm -p 8080:80 maximechartier/but-rt-s2-r209:latest

upload:
	docker push maximechartier/but-rt-s2-r209:latest