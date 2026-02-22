# Dockerfile for Backend
FROM node:20-slim

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .

# Environment variables will be injected via docker-compose env_file
EXPOSE 5000

CMD ["npm", "run", "dev"]
