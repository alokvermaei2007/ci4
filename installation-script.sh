#!/bin/bash

# Check if MySQL client is installed
if ! command -v mysql &> /dev/null
then
    echo "MySQL client is not installed. Please install it and try again."
    exit 1
fi

# Clone the repo from GitHub
echo "Cloning the repository from GitHub..."
git clone git@github.com:alokvermaei2007/ci4.git > /dev/null 2>&1
echo "Repository cloned successfully."

# Install dependencies with Composer
echo "Installing dependencies with Composer..."
cd ci4
composer install > /dev/null 2>&1
echo "Dependencies installed successfully."

# Prompt the user to enter database details
echo "Creating the database..."
read -p "Enter database name: " dbname
read -p "Enter database username: " dbuser
read -sp "Enter database password: " dbpass
echo ""
read -p "Enter database host: " dbhost

# Create the database
mysql -h $dbhost -u $dbuser -p$dbpass -e "CREATE DATABASE $dbname;" > /dev/null 2>&1
echo "Database created successfully."

# Import the SQL file
echo "Importing the SQL file..."
mysql -h $dbhost -u $dbuser -p$dbpass $dbname < database.sql > /dev/null 2>&1
echo "SQL file imported successfully."
