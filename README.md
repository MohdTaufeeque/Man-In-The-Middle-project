# Man-in-the-Middle Attack Simulation with HTTPS Implementation

**Repo:** Demonstration project for class/lab.  
**Author:** Mohammad Taufeeque (replace with your name)  
**Note:** This project is for educational purposes only. Do not use on networks without authorization.

## Files
- `index.html` — Insecure HTTP login demo (client).
- `login-handler.php` — Vulnerable server-side login (no hashing / vulnerable to SQLi).
- `attacker.php` — Attacker script that logs credentials to `stolen_credentials.txt`.
- `stolen_credentials.txt` — (ignored) Contains captured credentials during demo.
- `report.md` — Final project report.
- `screenshots/` — Demo screenshots.
- `.gitignore` — excludes `stolen_credentials.txt` etc.

## How to run (local testing only)
1. Use a local LAMP stack (XAMPP / WAMP / LAMP).
2. Place files into `htdocs/mitm_assignment` or `/var/www/html/mitm_assignment`.
3. Create MySQL DB `mitm_assignment`, table `users` and add a test user (see `report.md`).
4. Start Apache + MySQL. Open `http://localhost/mitm_assignment/index.html`.
5. To simulate attacker, submit form to `attacker.php` (or proxy request accordingly).
6. All tests must be conducted in an isolated lab.

## Security notes & mitigations
- Never store plaintext passwords. Use `password_hash()` / `password_verify()` in PHP.
- Protect against SQL injection using prepared statements (PDO / mysqli with bind_param).
- Use HTTPS (Let's Encrypt) or self-signed cert for demonstrations.
- Do not commit captured credentials to a public repo.

## License
For educational use.
