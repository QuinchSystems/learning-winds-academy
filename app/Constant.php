<?php

namespace App;

class Constant
{
    const APP_VERSION = "1.0.4";
    const EXCERPT_LENGTH = 90;

    const MOODLE_ROLE_MANAGER = 1;
    const MOODLE_ROLE_COURSE_CREATOR = 2;
    const MOODLE_ROLE_TEACHER = 3;
    const MOODLE_ROLE_NON_EDITING_TEACHER = 4;
    const MOODLE_ROLE_STUDENT = 5;
    const MOODLE_ROLE_GUEST = 6;
    const MOODLE_ROLE_AUTHENTICATED_USER = 7;

    const PAYMENT_METHOD_PAYU = 1;

    const PAYU_APP_USER_IDENTIFER = "udf1";
    const PAYU_COURSE_IDENTIFIER = "udf2";
}
