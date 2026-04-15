--
-- PostgreSQL database dump
--

\restrict tRCdC99xhxaJoYo0H1h2Nri2fF5sSt5stP9W0oYMDFhOcjmRXdIbt44nz99p9Bf

-- Dumped from database version 18.3
-- Dumped by pg_dump version 18.3

-- Started on 2026-04-14 16:16:49

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 5 (class 2615 OID 18630)
-- Name: gea; Type: SCHEMA; Schema: -; Owner: gea_developer
--

CREATE SCHEMA gea;


ALTER SCHEMA gea OWNER TO gea_developer;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 232 (class 1259 OID 18743)
-- Name: auth_groups_users; Type: TABLE; Schema: gea; Owner: gea_developer
--

CREATE TABLE gea.auth_groups_users (
    id integer NOT NULL,
    user_id integer NOT NULL,
    "group" character varying(255) NOT NULL,
    created_at timestamp without time zone NOT NULL
);


ALTER TABLE gea.auth_groups_users OWNER TO gea_developer;

--
-- TOC entry 231 (class 1259 OID 18742)
-- Name: auth_groups_users_id_seq; Type: SEQUENCE; Schema: gea; Owner: gea_developer
--

CREATE SEQUENCE gea.auth_groups_users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE gea.auth_groups_users_id_seq OWNER TO gea_developer;

--
-- TOC entry 5046 (class 0 OID 0)
-- Dependencies: 231
-- Name: auth_groups_users_id_seq; Type: SEQUENCE OWNED BY; Schema: gea; Owner: gea_developer
--

ALTER SEQUENCE gea.auth_groups_users_id_seq OWNED BY gea.auth_groups_users.id;


--
-- TOC entry 224 (class 1259 OID 18663)
-- Name: auth_identities; Type: TABLE; Schema: gea; Owner: gea_developer
--

CREATE TABLE gea.auth_identities (
    id integer NOT NULL,
    user_id integer NOT NULL,
    type character varying(255) NOT NULL,
    name character varying(255),
    secret character varying(255) NOT NULL,
    secret2 character varying(255),
    expires timestamp without time zone,
    extra text,
    force_reset smallint DEFAULT 0 NOT NULL,
    last_used_at timestamp without time zone,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);


ALTER TABLE gea.auth_identities OWNER TO gea_developer;

--
-- TOC entry 223 (class 1259 OID 18662)
-- Name: auth_identities_id_seq; Type: SEQUENCE; Schema: gea; Owner: gea_developer
--

CREATE SEQUENCE gea.auth_identities_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE gea.auth_identities_id_seq OWNER TO gea_developer;

--
-- TOC entry 5047 (class 0 OID 0)
-- Dependencies: 223
-- Name: auth_identities_id_seq; Type: SEQUENCE OWNED BY; Schema: gea; Owner: gea_developer
--

ALTER SEQUENCE gea.auth_identities_id_seq OWNED BY gea.auth_identities.id;


--
-- TOC entry 226 (class 1259 OID 18686)
-- Name: auth_logins; Type: TABLE; Schema: gea; Owner: gea_developer
--

CREATE TABLE gea.auth_logins (
    id integer NOT NULL,
    ip_address character varying(255) NOT NULL,
    user_agent character varying(255),
    id_type character varying(255) NOT NULL,
    identifier character varying(255) NOT NULL,
    user_id integer,
    date timestamp without time zone NOT NULL,
    success smallint NOT NULL
);


ALTER TABLE gea.auth_logins OWNER TO gea_developer;

--
-- TOC entry 225 (class 1259 OID 18685)
-- Name: auth_logins_id_seq; Type: SEQUENCE; Schema: gea; Owner: gea_developer
--

CREATE SEQUENCE gea.auth_logins_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE gea.auth_logins_id_seq OWNER TO gea_developer;

--
-- TOC entry 5048 (class 0 OID 0)
-- Dependencies: 225
-- Name: auth_logins_id_seq; Type: SEQUENCE OWNED BY; Schema: gea; Owner: gea_developer
--

ALTER SEQUENCE gea.auth_logins_id_seq OWNED BY gea.auth_logins.id;


--
-- TOC entry 234 (class 1259 OID 18759)
-- Name: auth_permissions_users; Type: TABLE; Schema: gea; Owner: gea_developer
--

CREATE TABLE gea.auth_permissions_users (
    id integer NOT NULL,
    user_id integer NOT NULL,
    permission character varying(255) NOT NULL,
    created_at timestamp without time zone NOT NULL
);


ALTER TABLE gea.auth_permissions_users OWNER TO gea_developer;

--
-- TOC entry 233 (class 1259 OID 18758)
-- Name: auth_permissions_users_id_seq; Type: SEQUENCE; Schema: gea; Owner: gea_developer
--

CREATE SEQUENCE gea.auth_permissions_users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE gea.auth_permissions_users_id_seq OWNER TO gea_developer;

--
-- TOC entry 5049 (class 0 OID 0)
-- Dependencies: 233
-- Name: auth_permissions_users_id_seq; Type: SEQUENCE OWNED BY; Schema: gea; Owner: gea_developer
--

ALTER SEQUENCE gea.auth_permissions_users_id_seq OWNED BY gea.auth_permissions_users.id;


--
-- TOC entry 230 (class 1259 OID 18720)
-- Name: auth_remember_tokens; Type: TABLE; Schema: gea; Owner: gea_developer
--

CREATE TABLE gea.auth_remember_tokens (
    id integer NOT NULL,
    selector character varying(255) NOT NULL,
    "hashedValidator" character varying(255) NOT NULL,
    user_id integer NOT NULL,
    expires timestamp without time zone NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL
);


ALTER TABLE gea.auth_remember_tokens OWNER TO gea_developer;

--
-- TOC entry 229 (class 1259 OID 18719)
-- Name: auth_remember_tokens_id_seq; Type: SEQUENCE; Schema: gea; Owner: gea_developer
--

CREATE SEQUENCE gea.auth_remember_tokens_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE gea.auth_remember_tokens_id_seq OWNER TO gea_developer;

--
-- TOC entry 5050 (class 0 OID 0)
-- Dependencies: 229
-- Name: auth_remember_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: gea; Owner: gea_developer
--

ALTER SEQUENCE gea.auth_remember_tokens_id_seq OWNED BY gea.auth_remember_tokens.id;


--
-- TOC entry 228 (class 1259 OID 18703)
-- Name: auth_token_logins; Type: TABLE; Schema: gea; Owner: gea_developer
--

CREATE TABLE gea.auth_token_logins (
    id integer NOT NULL,
    ip_address character varying(255) NOT NULL,
    user_agent character varying(255),
    id_type character varying(255) NOT NULL,
    identifier character varying(255) NOT NULL,
    user_id integer,
    date timestamp without time zone NOT NULL,
    success smallint NOT NULL
);


ALTER TABLE gea.auth_token_logins OWNER TO gea_developer;

--
-- TOC entry 227 (class 1259 OID 18702)
-- Name: auth_token_logins_id_seq; Type: SEQUENCE; Schema: gea; Owner: gea_developer
--

CREATE SEQUENCE gea.auth_token_logins_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE gea.auth_token_logins_id_seq OWNER TO gea_developer;

--
-- TOC entry 5051 (class 0 OID 0)
-- Dependencies: 227
-- Name: auth_token_logins_id_seq; Type: SEQUENCE OWNED BY; Schema: gea; Owner: gea_developer
--

ALTER SEQUENCE gea.auth_token_logins_id_seq OWNED BY gea.auth_token_logins.id;


--
-- TOC entry 238 (class 1259 OID 18792)
-- Name: awards; Type: TABLE; Schema: gea; Owner: gea_developer
--

CREATE TABLE gea.awards (
    id integer NOT NULL,
    a_name character varying(255) NOT NULL,
    template character varying(255)
);


ALTER TABLE gea.awards OWNER TO gea_developer;

--
-- TOC entry 237 (class 1259 OID 18791)
-- Name: awards_id_seq; Type: SEQUENCE; Schema: gea; Owner: gea_developer
--

CREATE SEQUENCE gea.awards_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE gea.awards_id_seq OWNER TO gea_developer;

--
-- TOC entry 5052 (class 0 OID 0)
-- Dependencies: 237
-- Name: awards_id_seq; Type: SEQUENCE OWNED BY; Schema: gea; Owner: gea_developer
--

ALTER SEQUENCE gea.awards_id_seq OWNED BY gea.awards.id;


--
-- TOC entry 220 (class 1259 OID 18633)
-- Name: migrations; Type: TABLE; Schema: gea; Owner: gea_developer
--

CREATE TABLE gea.migrations (
    id bigint NOT NULL,
    version character varying(255) NOT NULL,
    class character varying(255) NOT NULL,
    "group" character varying(255) NOT NULL,
    namespace character varying(255) NOT NULL,
    "time" integer NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE gea.migrations OWNER TO gea_developer;

--
-- TOC entry 219 (class 1259 OID 18632)
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: gea; Owner: gea_developer
--

CREATE SEQUENCE gea.migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE gea.migrations_id_seq OWNER TO gea_developer;

--
-- TOC entry 5053 (class 0 OID 0)
-- Dependencies: 219
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: gea; Owner: gea_developer
--

ALTER SEQUENCE gea.migrations_id_seq OWNED BY gea.migrations.id;


--
-- TOC entry 240 (class 1259 OID 18803)
-- Name: nominators; Type: TABLE; Schema: gea; Owner: gea_developer
--

CREATE TABLE gea.nominators (
    id integer NOT NULL,
    salutation2 character varying(20) NOT NULL,
    f_name2 character varying(100) NOT NULL,
    m_name2 character varying(100),
    l_name2 character varying(100) NOT NULL,
    affiliation2 character varying(255) NOT NULL,
    nationality2 character varying(100) NOT NULL,
    c_code2 character varying(10) NOT NULL,
    contact2 character varying(20) NOT NULL,
    n_email2 character varying(150) NOT NULL,
    n_salutation character varying(20) NOT NULL,
    n_fname character varying(100) NOT NULL,
    n_mname character varying(100),
    n_lname character varying(100) NOT NULL,
    n_affiliation character varying(255) NOT NULL,
    n_email character varying(150) NOT NULL,
    invitation_token character varying(100) NOT NULL,
    status character varying(20) DEFAULT 'pending'::character varying NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE gea.nominators OWNER TO gea_developer;

--
-- TOC entry 239 (class 1259 OID 18802)
-- Name: nominators_id_seq; Type: SEQUENCE; Schema: gea; Owner: gea_developer
--

CREATE SEQUENCE gea.nominators_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE gea.nominators_id_seq OWNER TO gea_developer;

--
-- TOC entry 5054 (class 0 OID 0)
-- Dependencies: 239
-- Name: nominators_id_seq; Type: SEQUENCE OWNED BY; Schema: gea; Owner: gea_developer
--

ALTER SEQUENCE gea.nominators_id_seq OWNED BY gea.nominators.id;


--
-- TOC entry 242 (class 1259 OID 18830)
-- Name: nominees; Type: TABLE; Schema: gea; Owner: gea_developer
--

CREATE TABLE gea.nominees (
    id integer NOT NULL,
    user_id integer,
    salutation character varying(20) NOT NULL,
    f_name character varying(100) NOT NULL,
    m_name character varying(100),
    l_name character varying(100) NOT NULL,
    gender character varying(20) NOT NULL,
    affiliation character varying(255) NOT NULL,
    nationality character varying(100) NOT NULL,
    c_code character varying(10) NOT NULL,
    contact character varying(20) NOT NULL,
    nemail character varying(150) NOT NULL,
    c_email character varying(150) NOT NULL,
    address text NOT NULL,
    award character varying(255) NOT NULL,
    summary text NOT NULL,
    contribution text NOT NULL,
    outcome text NOT NULL,
    innovation text NOT NULL,
    potential text NOT NULL,
    template_upload character varying(255),
    yt_link character varying(255),
    references_json text,
    status character varying(50) DEFAULT 'draft'::character varying NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);


ALTER TABLE gea.nominees OWNER TO gea_developer;

--
-- TOC entry 241 (class 1259 OID 18829)
-- Name: nominees_id_seq; Type: SEQUENCE; Schema: gea; Owner: gea_developer
--

CREATE SEQUENCE gea.nominees_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE gea.nominees_id_seq OWNER TO gea_developer;

--
-- TOC entry 5055 (class 0 OID 0)
-- Dependencies: 241
-- Name: nominees_id_seq; Type: SEQUENCE OWNED BY; Schema: gea; Owner: gea_developer
--

ALTER SEQUENCE gea.nominees_id_seq OWNED BY gea.nominees.id;


--
-- TOC entry 236 (class 1259 OID 18775)
-- Name: settings; Type: TABLE; Schema: gea; Owner: gea_developer
--

CREATE TABLE gea.settings (
    id integer NOT NULL,
    class character varying(255) NOT NULL,
    key character varying(255) NOT NULL,
    value text,
    type character varying(31) DEFAULT 'string'::character varying NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_at timestamp without time zone NOT NULL,
    context character varying(255)
);


ALTER TABLE gea.settings OWNER TO gea_developer;

--
-- TOC entry 235 (class 1259 OID 18774)
-- Name: settings_id_seq; Type: SEQUENCE; Schema: gea; Owner: gea_developer
--

CREATE SEQUENCE gea.settings_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE gea.settings_id_seq OWNER TO gea_developer;

--
-- TOC entry 5056 (class 0 OID 0)
-- Dependencies: 235
-- Name: settings_id_seq; Type: SEQUENCE OWNED BY; Schema: gea; Owner: gea_developer
--

ALTER SEQUENCE gea.settings_id_seq OWNED BY gea.settings.id;


--
-- TOC entry 222 (class 1259 OID 18649)
-- Name: users; Type: TABLE; Schema: gea; Owner: gea_developer
--

CREATE TABLE gea.users (
    id integer NOT NULL,
    username character varying(30),
    status character varying(255),
    status_message character varying(255),
    active smallint DEFAULT 0 NOT NULL,
    last_active timestamp without time zone,
    created_at timestamp without time zone,
    updated_at timestamp without time zone,
    deleted_at timestamp without time zone,
    first_name character varying(100),
    last_name character varying(100),
    avatar character varying(1000),
    google_id character varying(255),
    user_type character varying(50) DEFAULT 'participant'::character varying
);


ALTER TABLE gea.users OWNER TO gea_developer;

--
-- TOC entry 221 (class 1259 OID 18648)
-- Name: users_id_seq; Type: SEQUENCE; Schema: gea; Owner: gea_developer
--

CREATE SEQUENCE gea.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE gea.users_id_seq OWNER TO gea_developer;

--
-- TOC entry 5057 (class 0 OID 0)
-- Dependencies: 221
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: gea; Owner: gea_developer
--

ALTER SEQUENCE gea.users_id_seq OWNED BY gea.users.id;


--
-- TOC entry 4819 (class 2604 OID 18746)
-- Name: auth_groups_users id; Type: DEFAULT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_groups_users ALTER COLUMN id SET DEFAULT nextval('gea.auth_groups_users_id_seq'::regclass);


--
-- TOC entry 4814 (class 2604 OID 18666)
-- Name: auth_identities id; Type: DEFAULT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_identities ALTER COLUMN id SET DEFAULT nextval('gea.auth_identities_id_seq'::regclass);


--
-- TOC entry 4816 (class 2604 OID 18689)
-- Name: auth_logins id; Type: DEFAULT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_logins ALTER COLUMN id SET DEFAULT nextval('gea.auth_logins_id_seq'::regclass);


--
-- TOC entry 4820 (class 2604 OID 18762)
-- Name: auth_permissions_users id; Type: DEFAULT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_permissions_users ALTER COLUMN id SET DEFAULT nextval('gea.auth_permissions_users_id_seq'::regclass);


--
-- TOC entry 4818 (class 2604 OID 18723)
-- Name: auth_remember_tokens id; Type: DEFAULT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_remember_tokens ALTER COLUMN id SET DEFAULT nextval('gea.auth_remember_tokens_id_seq'::regclass);


--
-- TOC entry 4817 (class 2604 OID 18706)
-- Name: auth_token_logins id; Type: DEFAULT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_token_logins ALTER COLUMN id SET DEFAULT nextval('gea.auth_token_logins_id_seq'::regclass);


--
-- TOC entry 4823 (class 2604 OID 18795)
-- Name: awards id; Type: DEFAULT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.awards ALTER COLUMN id SET DEFAULT nextval('gea.awards_id_seq'::regclass);


--
-- TOC entry 4810 (class 2604 OID 18636)
-- Name: migrations id; Type: DEFAULT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.migrations ALTER COLUMN id SET DEFAULT nextval('gea.migrations_id_seq'::regclass);


--
-- TOC entry 4824 (class 2604 OID 18806)
-- Name: nominators id; Type: DEFAULT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.nominators ALTER COLUMN id SET DEFAULT nextval('gea.nominators_id_seq'::regclass);


--
-- TOC entry 4827 (class 2604 OID 18833)
-- Name: nominees id; Type: DEFAULT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.nominees ALTER COLUMN id SET DEFAULT nextval('gea.nominees_id_seq'::regclass);


--
-- TOC entry 4821 (class 2604 OID 18778)
-- Name: settings id; Type: DEFAULT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.settings ALTER COLUMN id SET DEFAULT nextval('gea.settings_id_seq'::regclass);


--
-- TOC entry 4811 (class 2604 OID 18652)
-- Name: users id; Type: DEFAULT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.users ALTER COLUMN id SET DEFAULT nextval('gea.users_id_seq'::regclass);


--
-- TOC entry 5029 (class 0 OID 18743)
-- Dependencies: 232
-- Data for Name: auth_groups_users; Type: TABLE DATA; Schema: gea; Owner: gea_developer
--

COPY gea.auth_groups_users (id, user_id, "group", created_at) FROM stdin;
1	1	admin	2026-04-14 08:13:03
\.


--
-- TOC entry 5021 (class 0 OID 18663)
-- Dependencies: 224
-- Data for Name: auth_identities; Type: TABLE DATA; Schema: gea; Owner: gea_developer
--

COPY gea.auth_identities (id, user_id, type, name, secret, secret2, expires, extra, force_reset, last_used_at, created_at, updated_at) FROM stdin;
1	1	email_password	\N	admin@gea.com	$2y$12$15NAOql3B2xnATejebhezuQBewT7fYPT6CZlKX5Uwtwn8If5tl6Ou	\N	\N	0	\N	2026-04-14 08:13:02	2026-04-14 08:13:03
\.


--
-- TOC entry 5023 (class 0 OID 18686)
-- Dependencies: 226
-- Data for Name: auth_logins; Type: TABLE DATA; Schema: gea; Owner: gea_developer
--

COPY gea.auth_logins (id, ip_address, user_agent, id_type, identifier, user_id, date, success) FROM stdin;
\.


--
-- TOC entry 5031 (class 0 OID 18759)
-- Dependencies: 234
-- Data for Name: auth_permissions_users; Type: TABLE DATA; Schema: gea; Owner: gea_developer
--

COPY gea.auth_permissions_users (id, user_id, permission, created_at) FROM stdin;
\.


--
-- TOC entry 5027 (class 0 OID 18720)
-- Dependencies: 230
-- Data for Name: auth_remember_tokens; Type: TABLE DATA; Schema: gea; Owner: gea_developer
--

COPY gea.auth_remember_tokens (id, selector, "hashedValidator", user_id, expires, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 5025 (class 0 OID 18703)
-- Dependencies: 228
-- Data for Name: auth_token_logins; Type: TABLE DATA; Schema: gea; Owner: gea_developer
--

COPY gea.auth_token_logins (id, ip_address, user_agent, id_type, identifier, user_id, date, success) FROM stdin;
\.


--
-- TOC entry 5035 (class 0 OID 18792)
-- Dependencies: 238
-- Data for Name: awards; Type: TABLE DATA; Schema: gea; Owner: gea_developer
--

COPY gea.awards (id, a_name, template) FROM stdin;
\.


--
-- TOC entry 5017 (class 0 OID 18633)
-- Dependencies: 220
-- Data for Name: migrations; Type: TABLE DATA; Schema: gea; Owner: gea_developer
--

COPY gea.migrations (id, version, class, "group", namespace, "time", batch) FROM stdin;
1	2020-12-28-223112	CodeIgniter\\Shield\\Database\\Migrations\\CreateAuthTables	default	CodeIgniter\\Shield	1776154343	1
2	2021-07-04-041948	CodeIgniter\\Settings\\Database\\Migrations\\CreateSettingsTable	default	CodeIgniter\\Settings	1776154343	1
3	2021-11-14-143905	CodeIgniter\\Settings\\Database\\Migrations\\AddContextColumn	default	CodeIgniter\\Settings	1776154343	1
4	2022-10-20-182737	Datamweb\\ShieldOAuth\\Database\\Migrations\\ShieldOAuth	default	Datamweb\\ShieldOAuth	1776154343	1
5	2026-04-15-000001	App\\Database\\Migrations\\AddCustomFieldsToUsers	default	App	1776154343	1
6	2026-04-15-000001	App\\Database\\Migrations\\CreateAwards	default	App	1776154343	1
7	2026-04-15-000001	App\\Database\\Migrations\\CreateNominators	default	App	1776154343	1
8	2026-04-15-000001	App\\Database\\Migrations\\CreateNominees	default	App	1776154343	1
\.


--
-- TOC entry 5037 (class 0 OID 18803)
-- Dependencies: 240
-- Data for Name: nominators; Type: TABLE DATA; Schema: gea; Owner: gea_developer
--

COPY gea.nominators (id, salutation2, f_name2, m_name2, l_name2, affiliation2, nationality2, c_code2, contact2, n_email2, n_salutation, n_fname, n_mname, n_lname, n_affiliation, n_email, invitation_token, status, created_at) FROM stdin;
\.


--
-- TOC entry 5039 (class 0 OID 18830)
-- Dependencies: 242
-- Data for Name: nominees; Type: TABLE DATA; Schema: gea; Owner: gea_developer
--

COPY gea.nominees (id, user_id, salutation, f_name, m_name, l_name, gender, affiliation, nationality, c_code, contact, nemail, c_email, address, award, summary, contribution, outcome, innovation, potential, template_upload, yt_link, references_json, status, created_at) FROM stdin;
\.


--
-- TOC entry 5033 (class 0 OID 18775)
-- Dependencies: 236
-- Data for Name: settings; Type: TABLE DATA; Schema: gea; Owner: gea_developer
--

COPY gea.settings (id, class, key, value, type, created_at, updated_at, context) FROM stdin;
\.


--
-- TOC entry 5019 (class 0 OID 18649)
-- Dependencies: 222
-- Data for Name: users; Type: TABLE DATA; Schema: gea; Owner: gea_developer
--

COPY gea.users (id, username, status, status_message, active, last_active, created_at, updated_at, deleted_at, first_name, last_name, avatar, google_id, user_type) FROM stdin;
1	\N	\N	\N	1	\N	2026-04-14 08:13:02	2026-04-14 08:13:02	\N	Global	Admin	\N	\N	admin
\.


--
-- TOC entry 5058 (class 0 OID 0)
-- Dependencies: 231
-- Name: auth_groups_users_id_seq; Type: SEQUENCE SET; Schema: gea; Owner: gea_developer
--

SELECT pg_catalog.setval('gea.auth_groups_users_id_seq', 1, true);


--
-- TOC entry 5059 (class 0 OID 0)
-- Dependencies: 223
-- Name: auth_identities_id_seq; Type: SEQUENCE SET; Schema: gea; Owner: gea_developer
--

SELECT pg_catalog.setval('gea.auth_identities_id_seq', 1, true);


--
-- TOC entry 5060 (class 0 OID 0)
-- Dependencies: 225
-- Name: auth_logins_id_seq; Type: SEQUENCE SET; Schema: gea; Owner: gea_developer
--

SELECT pg_catalog.setval('gea.auth_logins_id_seq', 1, false);


--
-- TOC entry 5061 (class 0 OID 0)
-- Dependencies: 233
-- Name: auth_permissions_users_id_seq; Type: SEQUENCE SET; Schema: gea; Owner: gea_developer
--

SELECT pg_catalog.setval('gea.auth_permissions_users_id_seq', 1, false);


--
-- TOC entry 5062 (class 0 OID 0)
-- Dependencies: 229
-- Name: auth_remember_tokens_id_seq; Type: SEQUENCE SET; Schema: gea; Owner: gea_developer
--

SELECT pg_catalog.setval('gea.auth_remember_tokens_id_seq', 1, false);


--
-- TOC entry 5063 (class 0 OID 0)
-- Dependencies: 227
-- Name: auth_token_logins_id_seq; Type: SEQUENCE SET; Schema: gea; Owner: gea_developer
--

SELECT pg_catalog.setval('gea.auth_token_logins_id_seq', 1, false);


--
-- TOC entry 5064 (class 0 OID 0)
-- Dependencies: 237
-- Name: awards_id_seq; Type: SEQUENCE SET; Schema: gea; Owner: gea_developer
--

SELECT pg_catalog.setval('gea.awards_id_seq', 1, false);


--
-- TOC entry 5065 (class 0 OID 0)
-- Dependencies: 219
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: gea; Owner: gea_developer
--

SELECT pg_catalog.setval('gea.migrations_id_seq', 8, true);


--
-- TOC entry 5066 (class 0 OID 0)
-- Dependencies: 239
-- Name: nominators_id_seq; Type: SEQUENCE SET; Schema: gea; Owner: gea_developer
--

SELECT pg_catalog.setval('gea.nominators_id_seq', 1, false);


--
-- TOC entry 5067 (class 0 OID 0)
-- Dependencies: 241
-- Name: nominees_id_seq; Type: SEQUENCE SET; Schema: gea; Owner: gea_developer
--

SELECT pg_catalog.setval('gea.nominees_id_seq', 1, false);


--
-- TOC entry 5068 (class 0 OID 0)
-- Dependencies: 235
-- Name: settings_id_seq; Type: SEQUENCE SET; Schema: gea; Owner: gea_developer
--

SELECT pg_catalog.setval('gea.settings_id_seq', 1, false);


--
-- TOC entry 5069 (class 0 OID 0)
-- Dependencies: 221
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: gea; Owner: gea_developer
--

SELECT pg_catalog.setval('gea.users_id_seq', 1, true);


--
-- TOC entry 4837 (class 2606 OID 18683)
-- Name: auth_identities auth_identities_type_secret; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_identities
    ADD CONSTRAINT auth_identities_type_secret UNIQUE (type, secret);


--
-- TOC entry 4850 (class 2606 OID 18741)
-- Name: auth_remember_tokens auth_remember_tokens_selector; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_remember_tokens
    ADD CONSTRAINT auth_remember_tokens_selector UNIQUE (selector);


--
-- TOC entry 4854 (class 2606 OID 18752)
-- Name: auth_groups_users pk_auth_groups_users; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_groups_users
    ADD CONSTRAINT pk_auth_groups_users PRIMARY KEY (id);


--
-- TOC entry 4840 (class 2606 OID 18676)
-- Name: auth_identities pk_auth_identities; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_identities
    ADD CONSTRAINT pk_auth_identities PRIMARY KEY (id);


--
-- TOC entry 4844 (class 2606 OID 18699)
-- Name: auth_logins pk_auth_logins; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_logins
    ADD CONSTRAINT pk_auth_logins PRIMARY KEY (id);


--
-- TOC entry 4856 (class 2606 OID 18768)
-- Name: auth_permissions_users pk_auth_permissions_users; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_permissions_users
    ADD CONSTRAINT pk_auth_permissions_users PRIMARY KEY (id);


--
-- TOC entry 4852 (class 2606 OID 18734)
-- Name: auth_remember_tokens pk_auth_remember_tokens; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_remember_tokens
    ADD CONSTRAINT pk_auth_remember_tokens PRIMARY KEY (id);


--
-- TOC entry 4848 (class 2606 OID 18716)
-- Name: auth_token_logins pk_auth_token_logins; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_token_logins
    ADD CONSTRAINT pk_auth_token_logins PRIMARY KEY (id);


--
-- TOC entry 4860 (class 2606 OID 18801)
-- Name: awards pk_awards; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.awards
    ADD CONSTRAINT pk_awards PRIMARY KEY (id);


--
-- TOC entry 4831 (class 2606 OID 18647)
-- Name: migrations pk_migrations; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.migrations
    ADD CONSTRAINT pk_migrations PRIMARY KEY (id);


--
-- TOC entry 4862 (class 2606 OID 18828)
-- Name: nominators pk_nominators; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.nominators
    ADD CONSTRAINT pk_nominators PRIMARY KEY (id);


--
-- TOC entry 4864 (class 2606 OID 18858)
-- Name: nominees pk_nominees; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.nominees
    ADD CONSTRAINT pk_nominees PRIMARY KEY (id);


--
-- TOC entry 4858 (class 2606 OID 18789)
-- Name: settings pk_settings; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.settings
    ADD CONSTRAINT pk_settings PRIMARY KEY (id);


--
-- TOC entry 4833 (class 2606 OID 18659)
-- Name: users pk_users; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.users
    ADD CONSTRAINT pk_users PRIMARY KEY (id);


--
-- TOC entry 4835 (class 2606 OID 18661)
-- Name: users users_username; Type: CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.users
    ADD CONSTRAINT users_username UNIQUE (username);


--
-- TOC entry 4838 (class 1259 OID 18684)
-- Name: auth_identities_user_id; Type: INDEX; Schema: gea; Owner: gea_developer
--

CREATE INDEX auth_identities_user_id ON gea.auth_identities USING btree (user_id);


--
-- TOC entry 4841 (class 1259 OID 18700)
-- Name: auth_logins_id_type_identifier; Type: INDEX; Schema: gea; Owner: gea_developer
--

CREATE INDEX auth_logins_id_type_identifier ON gea.auth_logins USING btree (id_type, identifier);


--
-- TOC entry 4842 (class 1259 OID 18701)
-- Name: auth_logins_user_id; Type: INDEX; Schema: gea; Owner: gea_developer
--

CREATE INDEX auth_logins_user_id ON gea.auth_logins USING btree (user_id);


--
-- TOC entry 4845 (class 1259 OID 18717)
-- Name: auth_token_logins_id_type_identifier; Type: INDEX; Schema: gea; Owner: gea_developer
--

CREATE INDEX auth_token_logins_id_type_identifier ON gea.auth_token_logins USING btree (id_type, identifier);


--
-- TOC entry 4846 (class 1259 OID 18718)
-- Name: auth_token_logins_user_id; Type: INDEX; Schema: gea; Owner: gea_developer
--

CREATE INDEX auth_token_logins_user_id ON gea.auth_token_logins USING btree (user_id);


--
-- TOC entry 4867 (class 2606 OID 18753)
-- Name: auth_groups_users auth_groups_users_user_id_foreign; Type: FK CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_groups_users
    ADD CONSTRAINT auth_groups_users_user_id_foreign FOREIGN KEY (user_id) REFERENCES gea.users(id) ON DELETE CASCADE;


--
-- TOC entry 4865 (class 2606 OID 18677)
-- Name: auth_identities auth_identities_user_id_foreign; Type: FK CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_identities
    ADD CONSTRAINT auth_identities_user_id_foreign FOREIGN KEY (user_id) REFERENCES gea.users(id) ON DELETE CASCADE;


--
-- TOC entry 4868 (class 2606 OID 18769)
-- Name: auth_permissions_users auth_permissions_users_user_id_foreign; Type: FK CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_permissions_users
    ADD CONSTRAINT auth_permissions_users_user_id_foreign FOREIGN KEY (user_id) REFERENCES gea.users(id) ON DELETE CASCADE;


--
-- TOC entry 4866 (class 2606 OID 18735)
-- Name: auth_remember_tokens auth_remember_tokens_user_id_foreign; Type: FK CONSTRAINT; Schema: gea; Owner: gea_developer
--

ALTER TABLE ONLY gea.auth_remember_tokens
    ADD CONSTRAINT auth_remember_tokens_user_id_foreign FOREIGN KEY (user_id) REFERENCES gea.users(id) ON DELETE CASCADE;


--
-- TOC entry 5045 (class 0 OID 0)
-- Dependencies: 5
-- Name: SCHEMA gea; Type: ACL; Schema: -; Owner: gea_developer
--

REVOKE USAGE ON SCHEMA gea FROM GEA;
GRANT ALL ON SCHEMA gea TO GEA;


-- Completed on 2026-04-14 16:16:49

--
-- PostgreSQL database dump complete
--

\unrestrict tRCdC99xhxaJoYo0H1h2Nri2fF5sSt5stP9W0oYMDFhOcjmRXdIbt44nz99p9Bf

