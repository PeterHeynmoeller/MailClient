#MailClient
You can send a POST request to this script with the following parameters:
Needed:
  email    -- which this email is going to be sent to
  from     -- clients will show this parameter as "Sent by:"
  subject  -- subject of the email
  text     -- the text of the email
Optional:
  timesToSend -- how often the email is going to be sent (0 = 1 email)
  timeToWait  -- how long the server is going to wait between sending the emails
