<?php
if (!function_exists('getBloodGroupList')) {
    function getBloodGroupList()
    {
        return [
            "A+", "A-", "B-", "B+", "O+", "O-", "AB+", "AB-",
        ];
    }
}

if (!function_exists('getGenderList')) {
    function getGenderList()
    {
        return ['Male', 'Female', 'Other'];
    }
}
if (!function_exists('getMarriedStatus')) {
    function getMarriedStatus()
    {
        return ['Married', 'Unmarried'];
    }
}
if (!function_exists('getSkillList')) {
    function getSkillList()
    {
        return [
            'Word',
            'Excel',
            'Powerpoint',
            'Typing',
            'Writing',
            'Speaking',
            'English',
            'Talking',
            'Energetic',
        ];
    }
}

