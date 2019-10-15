CREATE TABLE "users" ("id" SERIAL PRIMARY KEY, "user_name" varchar, "user_type" varchar);
CREATE TABLE "comments" ("id" SERIAL PRIMARY KEY, "comment_title" varchar, "created_at" varchar, "users_id" int);
CREATE TABLE "ratings" ("id" SERIAL PRIMARY KEY, "ranting" int, "users_id" int);

ALTER TABLE "comments" ADD FOREIGN KEY ("users_id") REFERENCES "users" ("id");
ALTER TABLE "ratings" ADD FOREIGN KEY ("users_id") REFERENCES "users" ("id");
