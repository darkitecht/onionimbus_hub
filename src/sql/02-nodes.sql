CREATE TABlE nodes (
    nodeid serial PRIMARY KEY,
    publickey TEXT,
    ip TEXT,
    name TEXT,
    created datetime DEFAULT NOW(),
    modified datetime
);
