function maxBit()
{
    list($return, $number) = array(0, 0);

    // Start process
    while (true) {
        // Get number at x bits
        $numX = intval(bcsub(bcpow('2', "{$return}"), '1'));
        // Check number
        if ($numX != 0 && $number == $numX) {
            break;
        }
        // Update number
        $number = $numX;
        // Update return value
        $return++;
    }

    return $return;
}

// Check is 64bit
echo maxBit();