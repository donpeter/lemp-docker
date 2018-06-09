# Linux, Nginx, MySQL, and PHP (LEMP) - Docker
The goal that we will try to achieve is to run a simple PHP application using the official Docker repositories for both PHP and Nginx. There are several docker repositories combining PHP-FPM with Nginx, but depending on the official repositories gives you several benefits, like using a service which is configured by its maintainers and you can always choose between the latest and greatest or different versions of both services, instead of relying on someone else’s choices.

# What LEMP stack?

LEMP is a variation of the LAMP stack used for developing and deploying php web applications. Traditionally, Linux, Apache, MySQL, and PHP are the technology stack that makes up the LAMP stack. Due to its modular nature, the components can easily be swapped out. With LEMP, Apache is replaced with the lightweight yet powerful Nginx server.
# Technologies
## Linux
An open source Unix-like operating system provides the base for the stack components. Many distributions include package management systems that make installing the desired applications easy. However, these repository versions will generally not be the most current. Two of the most commonly used Linux distributions in LEMP stacks are Debian and Ubuntu.

## Nginx
Nginx is an open source reverse proxy server for HTTP, HTTPS, SMTP, POP3, and IMAP protocols. It also functions as a load balancer, HTTP cache, and web server (origin server). It has a strong focus on high concurrency, high performance and low memory usage. The HTML5 Boilerplate project has sample server configuration files to improve performance and security.

## MySQL
MySQL is the second most widely used open source relational database management system. A community-developed fork, MariaDB, is led by the original developers. It aims to be a drop-in replacement.

## PHP
PHP is a server-side scripting language designed for web development. The scripting role can also be filled with Python or Perl. Servers such as Gunicorn or uWSGI can be used in conjunction with Nginx to serve these applications.

## Docker
Docker is a cutting-edge solution to this problem. It provides us with containers that have all the virtualization capabilities we need, while also being more lightweight than the traditional virtual machines.

Most developers use the (W|L|M)AMP stack as a starting point, but this environment can become overwhelming very quickly. Once you start feeling this pain, you'll start using VirtualBox to keep your host computer clean, and the projects separated. To make VirtualBox machines portable and easy to share and reproduce, Vagrant comes into play. Vagrant makes the virtual machines that we can share with our project members distributable, which helps developers reproduce the same configurable environment as the other developers in their team.

## Docker-compose
Compose is a tool for defining and running multi-container Docker applications. With Compose, you use a YAML file to configure your application’s services. Then, with a single command, you create and start all the services from your configuration. Compose works in all environments: production, staging, development, testing, as well as CI workflows. 

