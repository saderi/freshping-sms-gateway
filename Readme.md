# freshping.io sms gateway
Use [freshping.io](https://freshping.io) webhook to notify a SMS if a site is down.


## How to use

Clone this repo
`git clone https://github.com/saderi/freshping-sms-gateway`

Run php composer to install requirement
`composer  install`

Make copy of config-sample.php as config.php and update it.

Create webhook in your [freshping.io](https://freshping.io) `setting > integrations > Webhook`


## Available SMS gateway: 
* [Kavenegar](https://kavenegar.com)
* [Clickatell](https://www.clickatell.com)


## Todo
- [x] Add logging notify 
- [ ] Add [setrow](https://www.setrow.com) OR [jetsms](http://www.jetsms.net/) gateway for Turkey.
- [ ] Add configuration to enable/disable getting site UP notify.


## Contribution
Fork it. I will be very grateful. If you have an idea, put it in issue section.