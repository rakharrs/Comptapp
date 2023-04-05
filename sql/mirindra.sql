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

-- balance

CREATE or replace VIEW v_operation_balance AS
SELECT numero_compte,intitule,
       SUM(COALESCE(debit, 0)) AS total_debit_mv,
       SUM(COALESCE(credit, 0)) AS total_credit_mv,
       CASE
           WHEN SUM(COALESCE(debit, 0)) - SUM(COALESCE(credit, 0)) > 0 THEN ABS(SUM(COALESCE(debit, 0)) - SUM(COALESCE(credit, 0)))
           ELSE 0
       END AS solde_debit,
       CASE
           WHEN SUM(COALESCE(debit, 0)) - SUM(COALESCE(credit, 0)) < 0 THEN ABS(SUM(COALESCE(debit, 0)) - SUM(COALESCE(credit, 0)))
           ELSE 0
       END AS solde_credit
FROM operation
join compte_general cg on cg.id=numero_compte
GROUP BY numero_compte,intitule;


-- balance status 
CREATE VIEW v_balance_status AS
SELECT CASE
           WHEN SUM(balance) = 0 THEN 'Complete'
           ELSE 'Inacheve'
       END AS status
FROM v_operation_balance