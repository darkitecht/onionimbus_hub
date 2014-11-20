CREATE TABLE users (
    userid serial PRIMARY KEY,
    username TEXT,
    passwordhash TEXT,
    created datetime DEFAULT NOW(),
    modified datetime,
    email TEXT NULL,
    gpg_fingerprint TEXT,
    gpg_public_key TEXT NULL,
    KEY (username),
    KEY (gpg_fingerprint),
    KEY (gpg_public_key)
);
