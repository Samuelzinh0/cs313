CREATE TABLE "users" ("id" SERIAL PRIMARY KEY, "user_name" varchar, "user_type" varchar);
CREATE TABLE "comments" ("id" SERIAL PRIMARY KEY, "comment_title" varchar, "created_at" varchar, "comment_text" varchar, "users_id" SERIAL);
CREATE TABLE "ratings" ("id" SERIAL PRIMARY KEY, "rating" int, "users_id" SERIAL);

ALTER TABLE "comments" ADD FOREIGN KEY ("users_id") REFERENCES "users" ("id");
ALTER TABLE "ratings" ADD FOREIGN KEY ("users_id") REFERENCES "users" ("id");