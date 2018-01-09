# hiberbee.com

Build status: [![Build Status](https://travis-ci.org/Hiberbee/hiberbee.com.svg?branch=master)](https://travis-ci.org/Hiberbee/hiberbee.com)

# Installation

    docker-compose -f docker-compose.yml -f docker-compose.local.yml up -d

# Tests

    docker exec -d backend vendor/bin/behat
    
# Deployment

    docker build -t hiberbee/hiberbee.com:{major:minor:fix} .
    docker push hiberbee/hiberbee.com