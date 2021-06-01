# bacccweb1 docker
- master branch is a regular nginx + php dockerfile. Does not properly deal with IP logs by default; must set up docker networking properly to use
- proxy branch uses X-Forwarded-For header to set ip in logs, i.e. GCP Cloud Run
- Docker Container is tested on GCP Cloud Run and GCP Container-optimized OS
- nginx and php send logs to docker logs. Handle this as you wish
