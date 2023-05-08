#!/bin/bash

# Check if MySQL client is installed
if ! command -v /applications/MAMP/library/bin/mysql &> /dev/null
then
    echo "MySQL client is not installed. Please install it and try again."
    exit 1
fi

# Clone the repo from GitHub
git clone git@github.com:alokvermaei2007/ci4.git

# Install dependencies with Composer
cd ci4
composer install

# Prompt the user to enter database details
read -p "Enter database name: " dbname
read -p "Enter database username: " dbuser
read -sp "Enter database password: " dbpass
echo ""
read -p "Enter database host: " dbhost

# Create the database
/applications/MAMP/library/bin/mysql -h $dbhost -u $dbuser -p$dbpass -e "CREATE DATABASE $dbname;"

# Import the SQL file
/applications/MAMP/library/bin/mysql -h $dbhost -u $dbuser -p$dbpass $dbname < database.sql

