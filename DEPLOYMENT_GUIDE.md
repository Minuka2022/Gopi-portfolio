# 🚀 Gopi Portfolio - Docker Deployment Guide

## 📋 Table of Contents
1. [Prerequisites](#prerequisites)
2. [Local Development Setup](#local-development-setup)
3. [Production Deployment](#production-deployment)
4. [Server Setup (VPS/Cloud)](#server-setup-vpscloud)
5. [Domain & SSL Configuration](#domain--ssl-configuration)
6. [Troubleshooting](#troubleshooting)
7. [Maintenance](#maintenance)

---

## 📦 Prerequisites

Before deploying, ensure you have:

- **Docker** (version 20.10+)
- **Docker Compose** (version 2.0+)
- **Git** (for cloning repository)
- **Server/VPS** (DigitalOcean, AWS, Linode, etc.) OR **Local machine** for testing

### Installing Docker

#### Ubuntu/Debian:
```bash
sudo apt update
sudo apt install docker.io docker-compose -y
sudo systemctl start docker
sudo systemctl enable docker
sudo usermod -aG docker $USER
```

#### Windows:
Download and install [Docker Desktop](https://www.docker.com/products/docker-desktop/)

#### macOS:
Download and install [Docker Desktop](https://www.docker.com/products/docker-desktop/)

---

## 🔧 Local Development Setup

### Step 1: Clone the Repository
```bash
git clone <your-repository-url>
cd Gopi-portfolio
```

### Step 2: Configure Environment
```bash
# Copy the production environment template
cp .env.production .env

# Generate application key
docker run --rm -v $(pwd):/app composer/composer:latest bash -c "cd /app && php artisan key:generate"
```

### Step 3: Build and Run
```bash
# Build the Docker image
docker-compose build

# Start the containers
docker-compose up -d
```

### Step 4: Access Application
Open browser: `http://localhost:8080`

### Step 5: Stop Containers
```bash
docker-compose down
```

---

## 🌐 Production Deployment

### Option A: Deploy to VPS (Recommended)

#### Step 1: Server Preparation
```bash
# Update system
sudo apt update && sudo apt upgrade -y

# Install Docker & Docker Compose
curl -fsSL https://get.docker.com -o get-docker.sh
sudo sh get-docker.sh
sudo apt install docker-compose -y

# Install Git
sudo apt install git -y
```

#### Step 2: Clone Repository on Server
```bash
cd /var/www
sudo git clone <your-repository-url> gopi-portfolio
cd gopi-portfolio
sudo chown -R $USER:$USER .
```

#### Step 3: Configure Production Environment
```bash
# Copy production env file
cp .env.production .env

# Edit the .env file
nano .env
```

**Update these values:**
```env
APP_URL=http://your-domain.com
APP_DEBUG=false
APP_ENV=production
```

#### Step 4: Generate Application Key
```bash
docker run --rm -v $(pwd):/app php:8.2-cli php /app/artisan key:generate --show
```

Copy the generated key and add it to `.env`:
```env
APP_KEY=base64:YourGeneratedKeyHere
```

#### Step 5: Build and Deploy
```bash
# Build Docker image
docker-compose build

# Start containers in background
docker-compose up -d

# Check if running
docker-compose ps
```

#### Step 6: Run Initial Setup
```bash
# Enter the container
docker exec -it gopi-portfolio bash

# Inside container, run:
php artisan migrate --force
php artisan storage:link
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Exit container
exit
```

---

### Option B: Deploy to Docker Hub & Pull on Server

#### Step 1: Build and Push to Docker Hub
```bash
# Login to Docker Hub
docker login

# Build image with tag
docker build -t your-dockerhub-username/gopi-portfolio:latest .

# Push to Docker Hub
docker push your-dockerhub-username/gopi-portfolio:latest
```

#### Step 2: Pull and Run on Server
```bash
# On your server
docker pull your-dockerhub-username/gopi-portfolio:latest

docker run -d \
  --name gopi-portfolio \
  -p 8080:80 \
  -v $(pwd)/storage:/var/www/html/storage \
  -e APP_ENV=production \
  -e APP_DEBUG=false \
  your-dockerhub-username/gopi-portfolio:latest
```

---

## 🌍 Server Setup (VPS/Cloud)

### Recommended Providers
- **DigitalOcean** - $4-6/month droplet
- **Linode** - $5/month instance
- **AWS EC2** - t2.micro (free tier)
- **Vultr** - $3.5/month instance

### Firewall Configuration
```bash
# Allow HTTP
sudo ufw allow 80/tcp

# Allow HTTPS
sudo ufw allow 443/tcp

# Allow SSH
sudo ufw allow 22/tcp

# Enable firewall
sudo ufw enable
```

### Change Docker Port (if needed)
Edit `docker-compose.yml`:
```yaml
ports:
  - "80:80"  # Change 8080:80 to 80:80 for production
```

---

## 🔒 Domain & SSL Configuration

### Step 1: Point Domain to Server
Add DNS A Record:
```
Type: A
Name: @ (or subdomain)
Value: Your-Server-IP
TTL: 3600
```

### Step 2: Install Nginx as Reverse Proxy
```bash
sudo apt install nginx -y
```

### Step 3: Configure Nginx
```bash
sudo nano /etc/nginx/sites-available/gopi-portfolio
```

Add:
```nginx
server {
    listen 80;
    server_name your-domain.com www.your-domain.com;

    location / {
        proxy_pass http://localhost:8080;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }
}
```

Enable site:
```bash
sudo ln -s /etc/nginx/sites-available/gopi-portfolio /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx
```

### Step 4: Install SSL Certificate (Let's Encrypt)
```bash
# Install Certbot
sudo apt install certbot python3-certbot-nginx -y

# Generate SSL
sudo certbot --nginx -d your-domain.com -d www.your-domain.com

# Auto-renewal test
sudo certbot renew --dry-run
```

---

## 🛠️ Troubleshooting

### Container won't start
```bash
# Check logs
docker-compose logs -f

# Restart containers
docker-compose down
docker-compose up -d
```

### Permission errors
```bash
# Fix storage permissions
docker exec gopi-portfolio chown -R www-data:www-data /var/www/html/storage
docker exec gopi-portfolio chmod -R 755 /var/www/html/storage
```

### Database issues
```bash
# Enter container
docker exec -it gopi-portfolio bash

# Run migrations
php artisan migrate:fresh --force

# Exit
exit
```

### Clear all caches
```bash
docker exec gopi-portfolio php artisan cache:clear
docker exec gopi-portfolio php artisan config:clear
docker exec gopi-portfolio php artisan route:clear
docker exec gopi-portfolio php artisan view:clear
```

### Port already in use
```bash
# Check what's using port 8080
sudo lsof -i :8080

# Kill process
sudo kill -9 <PID>

# Or change port in docker-compose.yml
```

---

## 🔄 Maintenance

### Update Application
```bash
# Pull latest code
cd /var/www/gopi-portfolio
git pull origin main

# Rebuild container
docker-compose down
docker-compose build
docker-compose up -d

# Run migrations
docker exec gopi-portfolio php artisan migrate --force

# Clear caches
docker exec gopi-portfolio php artisan optimize
```

### Backup Database
```bash
# Backup SQLite database
docker cp gopi-portfolio:/var/www/html/database/database.sqlite ./backup-$(date +%Y%m%d).sqlite
```

### View Logs
```bash
# Application logs
docker exec gopi-portfolio tail -f storage/logs/laravel.log

# Container logs
docker-compose logs -f
```

### Monitor Resources
```bash
# Check Docker stats
docker stats gopi-portfolio

# Check disk usage
docker system df
```

---

## 📝 Quick Commands Reference

```bash
# Start application
docker-compose up -d

# Stop application
docker-compose down

# Restart application
docker-compose restart

# View logs
docker-compose logs -f

# Enter container
docker exec -it gopi-portfolio bash

# Check status
docker-compose ps

# Rebuild image
docker-compose build --no-cache
```

---

## 🆘 Support

If you encounter issues:

1. Check logs: `docker-compose logs -f`
2. Verify environment variables in `.env`
3. Ensure ports are not in use
4. Check file permissions
5. Verify Docker is running: `docker ps`

---

## ✅ Post-Deployment Checklist

- [ ] Application accessible via domain
- [ ] SSL certificate installed and working
- [ ] Database migrations completed
- [ ] Storage permissions configured
- [ ] Caches optimized
- [ ] Backup strategy in place
- [ ] Firewall configured
- [ ] Admin panel accessible
- [ ] Email notifications working (if applicable)
- [ ] Monitor logs for errors

---

**Deployment Date:** ___________
**Deployed By:** ___________
**Server IP:** ___________
**Domain:** ___________

---

## 📞 Contact

For deployment support, contact the development team.

**Good luck with your deployment! 🚀**
