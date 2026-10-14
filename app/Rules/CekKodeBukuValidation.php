<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Str;
use Illuminate\Translation\PotentiallyTranslatedString;

class CekKodeBukuValidation implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! Str::startsWith($value, 'BUK')) {
            $fail('Kode harus diawali dengan BUK');
        }

        // BUK123
        $number = Str::after($value, 'BUK');

        // 123
        if (Str::length($number) != 3 || ! ctype_digit($number)) {
            $fail('Kode Belakang harus berupa 3 angka.');
        }
    }
}
