REGION="eu-west-1"
aws cloudformation deploy \
  --template-file cloudformation/front_cloudfront.yml \
  --stack-name staging-mooddy-app-tow \
  --parameter-overrides StaticHosting=app.mooddy.net Domain=app \
  --capabilities CAPABILITY_NAMED_IAM CAPABILITY_AUTO_EXPAND \
  --region ${REGION} \
  --no-fail-on-empty-changeset
aws s3 cp src/ s3://app.mooddy.net/ --recursive