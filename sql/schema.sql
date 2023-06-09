--
-- PostgreSQL database dump
--

-- Dumped from database version 10.22
-- Dumped by pg_dump version 14.6

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

--
-- Name: code_journaux; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.code_journaux (
    id integer NOT NULL,
    code character varying(10) NOT NULL,
    intitule character varying(100) NOT NULL
);


ALTER TABLE public.code_journaux OWNER TO postgres;

--
-- Name: code_journaux_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.code_journaux_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.code_journaux_id_seq OWNER TO postgres;

--
-- Name: code_journaux_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.code_journaux_id_seq OWNED BY public.code_journaux.id;


--
-- Name: compte_general; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.compte_general (
    id character varying(5) NOT NULL,
    intitule character varying(200) NOT NULL
);


ALTER TABLE public.compte_general OWNER TO postgres;

--
-- Name: compte_tier; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.compte_tier (
    id integer NOT NULL,
    id_type integer NOT NULL,
    numero character varying(20),
    intitule character varying(50) NOT NULL
);


ALTER TABLE public.compte_tier OWNER TO postgres;

--
-- Name: compte_tier_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.compte_tier_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.compte_tier_id_seq OWNER TO postgres;

--
-- Name: compte_tier_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.compte_tier_id_seq OWNED BY public.compte_tier.id;


--
-- Name: type; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.type (
    id integer NOT NULL,
    intitule character varying(2) NOT NULL
);


ALTER TABLE public.type OWNER TO postgres;

--
-- Name: liste_compte_tier; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.liste_compte_tier AS
 SELECT ct.id,
    t.intitule AS type,
    ct.numero,
    ct.intitule
   FROM (public.compte_tier ct
     JOIN public.type t ON ((t.id = ct.id_type)));


ALTER TABLE public.liste_compte_tier OWNER TO postgres;

--
-- Name: operation; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.operation (
    id integer NOT NULL,
    libelle character varying(80) NOT NULL,
    numero_piece character varying(20) NOT NULL,
    numero_compte character varying(5),
    compte_tier integer,
    code_journal integer,
    date_operation date NOT NULL,
    debit numeric DEFAULT 0,
    credit numeric DEFAULT 0
);


ALTER TABLE public.operation OWNER TO postgres;

--
-- Name: operation_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.operation_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.operation_id_seq OWNER TO postgres;

--
-- Name: operation_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.operation_id_seq OWNED BY public.operation.id;


--
-- Name: societe; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.societe (
    name character varying(80),
    objet text,
    siege character varying(200),
    owner character varying(200),
    fisc character varying(15),
    nifstat_file_path text,
    rcs character varying(200),
    status_file_path text,
    debut_exercice date,
    id integer NOT NULL
);


ALTER TABLE public.societe OWNER TO postgres;

--
-- Name: societe_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.societe_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.societe_id_seq OWNER TO postgres;

--
-- Name: societe_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.societe_id_seq OWNED BY public.societe.id;


--
-- Name: type_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.type_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.type_id_seq OWNER TO postgres;

--
-- Name: type_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.type_id_seq OWNED BY public.type.id;


--
-- Name: utilisateur; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.utilisateur (
    id integer NOT NULL,
    identifiant character varying(80),
    password character varying(80)
);


ALTER TABLE public.utilisateur OWNER TO postgres;

--
-- Name: utilisateur_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.utilisateur_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.utilisateur_id_seq OWNER TO postgres;

--
-- Name: utilisateur_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.utilisateur_id_seq OWNED BY public.utilisateur.id;


--
-- Name: code_journaux id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.code_journaux ALTER COLUMN id SET DEFAULT nextval('public.code_journaux_id_seq'::regclass);


--
-- Name: compte_tier id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.compte_tier ALTER COLUMN id SET DEFAULT nextval('public.compte_tier_id_seq'::regclass);


--
-- Name: operation id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.operation ALTER COLUMN id SET DEFAULT nextval('public.operation_id_seq'::regclass);


--
-- Name: societe id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.societe ALTER COLUMN id SET DEFAULT nextval('public.societe_id_seq'::regclass);


--
-- Name: type id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.type ALTER COLUMN id SET DEFAULT nextval('public.type_id_seq'::regclass);


--
-- Name: utilisateur id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.utilisateur ALTER COLUMN id SET DEFAULT nextval('public.utilisateur_id_seq'::regclass);


--
-- Data for Name: code_journaux; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.code_journaux (id, code, intitule) FROM stdin;
2	AC	Achat
\.


--
-- Data for Name: compte_general; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.compte_general (id, intitule) FROM stdin;
10610	RESERVE LEGALE
11000	REPORT A NOUVEAU
11010	REPORT A NOUVEAU SOLDE CREDITEUR
11200	AUTRES PRODUITS ET CHARGES
11900	REPORT A NOUVEAU SOLDE DEBITEUR
12800	RESULTAT EN INSTANCE
13300	IMPOTS DIFFERES ACTIFS
16110	EMPRUNT A LT
16510	ENMPRUNT A MOYEN TERME
20124	FRAIS DE REHABILITATION
20800	AUTRES IMMOB INCORPORELLES
21100	TERRAINS
21200	CONSTRUCTION
21300	MATERIEL ET OUTILLAGE
21510	MATERIEL AUTOMOBILE
21520	MATERIEL MOTO
21600	AGENCEMENT. AM .INST
21810	MATERIELS ET MOBILIERS DE BUREAU
21819	MATERIELS INFORMATIQUES ET AUTRES
21820	MAT. MOB DE LOGEMENT
21880	AUTRES IMMOBILISATIONS CORP
23000	IMMOBILISATION EN COURS
28000	AMORT IMMOB INCORP
28120	AMORTISSEMENT DES CONSTRUCTIONS
28130	AMORT MACH-MATER-OUTIL
28150	AMORT MAT DE TRANSPORT
28160	AMORT A.A.I
28181	AMORT MATERIEL&MOB
28182	AMORTISSEMENTS MATERIELS INFORMATIQ
28183	AMORT MATER & MOB LOGT
32110	STOCK MATIERES PREMIERES
35500	STOCK PRODUITS FINIS
37000	STOCK MARCHANDISES
39700	PROVISIONS/DEPRECIATIONS STOCKS
40110	FOURNISSEURS DEXPLOITATIONS LOCAUX
40120	FOURNISSEURS DEXPLOITATIONS ETRANGERS
40310	FOURNISSEURS D'IMMOBILISATION
40810	FRNS: FACTURE A RECEVOIR
40910	FRNS:AVANCES&ACOMPTES VERSER
40980	FRNS: RABAIS A OBTENIR
41110	CLIENTS LOCAUX
41120	CLIENTS ETRANGERS
41400	CLIENTS DOUTEUX
41800	CLIENTS FACTURE A RETABLIR
42100	PERSONNEL: SALAIRES A PAYER
42510	PERSONNEL: AVANCES QUINZAINES
42520	PERSONNEL: AVANCES SPECIALES
42860	PERS:CHARGES  A PAYER
43100	CNAPS 
43120	OSTIE
44200	ETAT IBS
44210	ACOMPTE IBS
44321	TVA ΓÇª IMPUTER:DEC ULTERIEURE
44500	ETAT:IRSA VERSER
44560	ETAT: TVA DEDUCTIBLE
44570	ETAT: TVA COLLECTEE
44571	TVA A VERSER
45100	COMPTE  COURANT ASSOC
46700	DEB/CRED DIVERS
46800	CHARGES A PAYER DEB/CRED DIVERS
48610	CHARGE CONSTATES D'AVANCE
49100	PERTE/CLIENTS
51200	BOA ANKORONDRANO
51201	BOA DOLLARS
51202	BNI MADAGASCAR
51203	BNI DOLLARS
53100	CAISSE 
58110	VIREMENTINTERNE:BANQ/CAISSE
58130	VIREMENT INTERNE:BANQ/BANQ
58140	VIREMENT INTERNE CAISSE/CAISSE
60100	ACHAT MATIERES PREMIERESS
60200	FOURNIT DE MAGASIN
60210	FOURNIT BUR 
60220	FOURNIT DE LOGT
60230	EMBALLAGES(PLAST-CARTON....
60240	PIEC RECH VOITURES ADMINISTRATIVES
60241	PIEC RECH CAMIONS
60242	PIEC RECH MOTO
60250	AUTRES ACHATS
60300	VARIATION  STOCK MAT PREM
60610	EAU ET ELECTRICITE
60620	GAZ,COMBUST,CARBURANT,LUBRIF
61300	LOC IMMOBILIERES
61380	AUTRES LOCATIONS
61550	ENTRET & REP VEHICULE
61560	MAINTENANCE
61610	ASSURANCE GLOBALE DOMMAGES
61611	ASSURANCE FLOTTE AUTOMOBILE
61800	PHOTOCOPIE ET ASSIMILES 
61810	ENVOI COLIS(LETTRE&DOC...
62100	PERSONNEL EXTER
62210	HONORAIRE
62220	REMUNERATION DES TRANSITAIRES
62230	CATALOGUES ET IMPRIMES
62240	PUBLICATION
62250	SPONSORING-MECENAT...
62260	TS DOUANE ET ASSIMILES
62400	FRAIS DE TRANSPORT
62510	VOYAGES   ET DEPLACEMENT
62520	MISSION(DEPL+HEBERGT+REST├╕)
62530	RECEPTION
62610	SERVICES POSTAUX
62620	TEL&FAX
62630	INTERNET TANA
62740	COMMISSIONS BANCAIRE INTERNATIONALE
62760	COMMISSIONS BNI
62770	COMMISSIONS BOA
62880	AUTRES  CHARGES EXTERNES
63680	AUTRES IMPOTS/TAXES/DROITS DIV
64100	REMUNERATION PERSONNEL
64120	DROIT DE CONGES
64511	CNAPS:COTISATION  PATRONALE
64512	OSTIE : COTISATION PATRONALE
64750	MED ET ASSIM PERS
65800	AUTRES CHARGES DIVERSES
65810	ECART/PAIEMENT
65811	PERTE/TVA NON RECUPERABLE
66200	INTERETS  BANCAIRES BNI
66300	INTERETS  BANCAIRES BOA
66600	DIFFF  DE  CHANGE  PERTE
66680	AGIOS/TRAITES
68110	D.A.P  IMMO INCORPORELLES
68120	D.A.P  IMMO  CORPORELLE
70110	VENTE LOCALE
70120	VENTES  A  L EXPORTATION
70800	AUTRES PROD  DES ACT ANNEX&ACS
71300	VARIATION DE STOCK  P.F
75800	AUTRES PRODUITS D EXPLOITATION
75810	ECART/ENCAISSEMENT
76200	INTERET CREDITEUR BANQUES BNI
76300	INTERET CREDITEUR BANQUES BOA
76600	DIFFERENCE DE  CHANGE:PROFIT
90888	OKOKOK
10100	CAPITAL
99881	Mirindraoooo
\.


--
-- Data for Name: compte_tier; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.compte_tier (id, id_type, numero, intitule) FROM stdin;
0	0	\N	Aucun
\.


--
-- Data for Name: operation; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.operation (id, libelle, numero_piece, numero_compte, compte_tier, code_journal, date_operation, debit, credit) FROM stdin;
1	test	1	10100	1	2	2023-03-10	0	250
2	test	1	11000	0	2	2023-03-02	0	0
3	bonjour	3134R1131143	10100	0	2	2023-03-08	90909	0
\.


--
-- Data for Name: societe; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.societe (name, objet, siege, owner, fisc, nifstat_file_path, rcs, status_file_path, debut_exercice, id) FROM stdin;
OK	ok	Ok	OK	OK	OK	OK	OK	2023-04-03	1
\.


--
-- Data for Name: type; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.type (id, intitule) FROM stdin;
1	cl
2	fo
0	Na
\.


--
-- Data for Name: utilisateur; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.utilisateur (id, identifiant, password) FROM stdin;
1	test	test
\.


--
-- Name: code_journaux_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.code_journaux_id_seq', 2, true);


--
-- Name: compte_tier_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.compte_tier_id_seq', 1, false);


--
-- Name: operation_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.operation_id_seq', 3, true);


--
-- Name: societe_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.societe_id_seq', 1, true);


--
-- Name: type_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.type_id_seq', 2, true);


--
-- Name: utilisateur_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.utilisateur_id_seq', 1, true);


--
-- Name: code_journaux code_journaux_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.code_journaux
    ADD CONSTRAINT code_journaux_pkey PRIMARY KEY (id);


--
-- Name: compte_general compte_general_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.compte_general
    ADD CONSTRAINT compte_general_pkey PRIMARY KEY (id);


--
-- Name: compte_tier compte_tier_numero_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.compte_tier
    ADD CONSTRAINT compte_tier_numero_key UNIQUE (numero);


--
-- Name: compte_tier compte_tier_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.compte_tier
    ADD CONSTRAINT compte_tier_pkey PRIMARY KEY (id);


--
-- Name: societe key_name; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.societe
    ADD CONSTRAINT key_name PRIMARY KEY (id);


--
-- Name: operation operation_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.operation
    ADD CONSTRAINT operation_pkey PRIMARY KEY (id);


--
-- Name: type type_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.type
    ADD CONSTRAINT type_pkey PRIMARY KEY (id);


--
-- Name: utilisateur utilisateur_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.utilisateur
    ADD CONSTRAINT utilisateur_pkey PRIMARY KEY (id);


--
-- Name: compte_tier compte_tier_id_type_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.compte_tier
    ADD CONSTRAINT compte_tier_id_type_fkey FOREIGN KEY (id_type) REFERENCES public.type(id);


--
-- Name: operation operation_code_journal_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.operation
    ADD CONSTRAINT operation_code_journal_fkey FOREIGN KEY (code_journal) REFERENCES public.code_journaux(id);


--
-- Name: operation operation_numero_compte_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.operation
    ADD CONSTRAINT operation_numero_compte_fkey FOREIGN KEY (numero_compte) REFERENCES public.compte_general(id);


--
-- PostgreSQL database dump complete
--

