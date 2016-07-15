# Attogram Framework Contact Form Module v0.0.1

[![Build Status](https://travis-ci.org/attogram/attogram-contactform.svg?branch=master)](https://travis-ci.org/attogram/attogram-contactform)
[![Latest Stable Version](https://poser.pugx.org/attogram/attogram-contactform/v/stable)](https://packagist.org/packages/attogram/attogram-contactform)
[![Latest Unstable Version](https://poser.pugx.org/attogram/attogram-contactform/v/unstable)](https://packagist.org/packages/attogram/attogram-contactform)
[![Total Downloads](https://poser.pugx.org/attogram/attogram-contactform/downloads)](https://packagist.org/packages/attogram/attogram-contactform)
[![License](https://poser.pugx.org/attogram/attogram-contactform/license)](https://github.com/attogram/attogram-contactform/blob/master/LICENSE.md)
[![Code Climate](https://codeclimate.com/github/attogram/attogram-contactform/badges/gpa.svg)](https://codeclimate.com/github/attogram/attogram-contactform)
[![Issue Count](https://codeclimate.com/github/attogram/attogram-contactform/badges/issue_count.svg)](https://codeclimate.com/github/attogram/attogram-contactform)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/ccc7d8a823254176bed3976cfa3bb2a6)](https://www.codacy.com/app/attogram-project/attogram-contactform?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=attogram/attogram-contactform&amp;utm_campaign=Badge_Grade)
[`[CHANGELOG]`](https://github.com/attogram/attogram-contactform/blob/master/CHANGELOG.md)
[`[TODO]`](https://github.com/attogram/attogram-contactform/blob/master/TODO.md)

This is the Contact Form Module for the [Attogram Framework](https://github.com/attogram/attogram).

# Installing the Contact Form Module
* You already installed the [Attogram Framework](https://github.com/attogram/attogram), didn't you?
* You already installed the [Attogram Framework Database Module](https://github.com/attogram/attogram-database), didn't you?
* Goto the top level of your install, then run:
```
composer create-project attogram/attogram-contactform modules/contactform
```

# Contact Form Module contents

* Public Actions:
 * `actions/contact.php` - The contact form

* Admin Actions:
 * `admin_actions/contact-admin.php` - View/delete messages

* Database Tables
 * `tables/contact.sql`  Contact  table

* Misc:
 * `tests/BaseTest.php` - phpunit tests
