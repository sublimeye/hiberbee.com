# hiberbee.com

Build status: [![Build Status](https://travis-ci.org/Hiberbee/hiberbee.com.svg?branch=master)](https://travis-ci.org/Hiberbee/hiberbee.com)

# Installation

    docker-compose -f docker-compose.local.yml up -d

# Tests

    docker exec -it hiberbeecom_app_1 vendor/bin/behat
    
# Deployment

As hiberbee/hiberbee.com image is building each time Travis CI triggers, you can simply run these commands in production env:

    docker-compose pull
    docker-compose up -d 
