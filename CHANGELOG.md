# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

# [Released]
## [1.6.0] - 2018-01-19
### Added
- React js now render index.html application

## [1.5.0] - 2018-01-18
### Added
- Presentation framework reveal.js with basic template
- Added database dependency
- API & html are now separated. Twig dependency removed

## [1.4.2] - 2018-01-18
### Added
- Facebook tracking pixel

## [1.4.1] - 2018-01-13
### Added 
- SSL configuration as well as certificates for nginx config

## [1.4.0] - 2018-01-12
### Added
- Translation to EN is now available
### Refactoring
- Removed .env file - now all env var are forced by docker-compose environment

## [1.3.0] - 2018-01-12
### Added
- New index page blocks - process, about, technologies, projects
- Mobile version menu
### Changed
- Design improvements

## [1.2.0] - 2018-01-10
### Changed
- Removed obsolete / redundant dependencies on database & sibling bundles
- Updated cover photo

## [1.1.0] - 2018-01-09
### Changed
- JS honeycomb pattern was replaced by static image until better solution will be found

## [1.0.0] - 2018-01-09
### Added 
- Google analytics account

## [0.0.5] - 2018-01-09
### Refactoring
- Now CI process deploy application completely and run tests
- Minor fixes with docker compose files

## [0.0.4] - 2018-01-09
### Refactoring
- Docker-compose is now available for production & local environments

## [0.0.3] - 2018-01-08
### Added
- New design available now for homepage
- Call & message buttons
- Text translations for index page

### Refactoring
- Docker is now building properly for production environments
- Images were refactored 

## [0.0.2] - 2018-01-05
### Added
- Linkedin OAuth and profile synchronizing with persistent storage
- Authentication done on backend
- Mail with new password will be sended on sign up

### Refactoring
- Moved secret keys to .env file
- Grouped common namespaces by prefix
- Code styling

## [0.0.1] - 2018-01-04
### Added
- This CHANGELOG file to hopefully serve as an evolving example of a
  standardized open source project CHANGELOG.
- Facebook OAuth and profile synchronizing with persistent storage
