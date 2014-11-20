CREATE TABLE sites (
    siteid serial PRIMARY KEY,
    userid integer,
    nodeid integer,
    domain TEXT,
    onion TEXT,
    created datetime DEFAULT NOW(),
    modified datetime,
    options JSON,
    FOREIGN KEY (`userid`) REFERENCES users (`userid`),
    FOREIGN KEY (`nodeid`) REFERENCES nodes (`nodeid`)
);
