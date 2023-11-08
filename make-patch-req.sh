#!/bin/bash

curl --request PATCH \
  'https://retail.googleapis.com/v2/projects/142907619173/locations/global/catalogs/default_catalog/branches/2/products/2220222750011?allowMissing=true' \
  --header "Authorization: Bearer $(php main.php)" \
  --header 'Accept: application/json' \
  --header 'Content-Type: application/json' \
  --data '{"title":"test patch","categories":["some category > some subcategory"]}' \
  --compressed
