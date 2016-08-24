PTS
===
PHP Testing Script

How to use
----------

1. Put your source code (to be tested) in `src/`
2. Download the software (`run`), place it in your `<test-dir>`
3. for each test, create a folder with the following structure:

        <test-dir>/test-<testname>/exit_code
        <test-dir>/test-<testname>/output
        <test-dir>/test-<testname>/test.php
4. Fill the files with, respectively:
  - The expected return code (of the comparison: `0` for a match, `1` for a non-match)
  - The expected output
  - The test code
5. run tests/run

Notes
-----
- It is possible to place some files that can be imported directly (i.e. `include('file.php');` without a path) in `tests/common`. Those files are meant to be common to all tests. An example of such a file would be a file containing the code to mock the functions/classes of a dependency of the tested code.
- If a PHP error is expected, it is important to place it in the `output` file as well (both `stdout` and `stderr` are used to compare to the `output` file), and the path of the reported file will be relative to the project, not absolute (i.e. not `/your/path/to/the/project/src/file.php` but simply `src/file.php`).
- If your source isn't in `src/`, please edit the `SRCDIR` variable in `tests/run` accordingly (the `$SRCDIR` variable is used to change the directory before the tests execution, so the PATH context is similar to the one of a deployed application).
