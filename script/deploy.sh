REGION="eu-west-1"
aws cloudformation deploy \
  --template-file cloudformation/front_cloudfront.yml \
  --stack-name staging-mooddy-app-com \
  --parameter-overrides StaticHosting=www.mooddy-app.com Domain=www \
  --capabilities CAPABILITY_NAMED_IAM CAPABILITY_AUTO_EXPAND \
  --region ${REGION} \
  --no-fail-on-empty-changeset
aws s3 cp src/ s3://www.mooddy-app.com-artifact/ --recursive