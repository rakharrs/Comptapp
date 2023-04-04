create table societe
(
    idsociete     varchar(100) not null
        primary key,
    name          varchar(100) not null,
    fondateur     varchar(200) not null,
    siege         varchar(200) not null,
    status        varchar      not null,
    nif           varchar      not null,
    nif_path      varchar,
    num_stat      varchar      not null,
    telecopie     varchar(20)  not null,
    telephone     varchar(20)  not null,
    description   varchar(255),
    mdp           varchar(200) not null,
    email         varchar      not null,
    date_creation date         not null,
    date_exercice date         not null
);

alter table societe
    owner to postgres;

