# CICD Description

### Tools used
- Circleci 
- Ansible

### Steps

The following are the steps taken to complete the CI/CD

1. Install ansible in circleci runtime environment
1. Run ansible playbook
1. Install docker and docker-compose on the remote server
1. Copy source code to remote server and extract it. Run docker-compose up to startup the services
1. Install nginx and configure SSL. Redirect :433 traffic to :8000
1. Install and configure prometheus for monitoring
