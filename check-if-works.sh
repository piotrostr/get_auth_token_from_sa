#!/bin/bash

printf "Checking if it works...\n"
printf "The response should be something like this:\n"
printf '{
  "issued_to": "111951405112890498953",
  "audience": "111951405112890498953",
  "scope": "https://www.googleapis.com/auth/cloud-platform",
  "expires_in": 3599,
  "access_type": "online"
}'

printf "\n\n"

token=$(php main.php)

printf "GET https://www.googleapis.com/oauth2/v1/tokeninfo?access_token=$token"

printf "\n\n"

curl https://www.googleapis.com/oauth2/v1/tokeninfo?access_token=$token
