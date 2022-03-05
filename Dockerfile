FROM node:16-alpine
WORKDIR /app
COPY . .
RUN yarn
RUN yarn build
RUN ls -al

FROM nginx:alpine
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY --from=0 /app/dist /www/data/
