<?php

namespace Msmahon\QpdfPhpWrapper\Enums;

enum ExitCode: int
{
    /**
     * no errors or warnings
     */
    case success = 0;
    /**
     * not used by qpdf but may be used by the shell if unable to invoke qpdf
     */
    case nonInvokable = 1;
    /**
     * errors detected
     */
    case error = 2;
    /**
     * warnings detected, unless --warning-exit-0 is given
     */
    case warning = 3;
}
