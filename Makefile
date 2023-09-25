include .env
DUMP_DIR = dumps
DATE = $(shell date +\%Y\%m\%d\%H)

# Establece el valor por defecto de WP_PATH si no está definido en .env
WP_PATH ?= wordpress

db-export:
	mkdir -p $(DUMP_DIR)
	lando wp --path=$(WP_PATH) db export $(DUMP_DIR)/$(WP_PATH)-$(DATE).sql

core-check-update:
	lando wp --path=wordpress/ core check-update

dry-run:
	lando wp --path=$(WP_PATH) plugin update --dry-run --all > logs/dry-run_$(DATE).txt

backup:
	lando wp --path=$(WP_PATH) db export backup.sql

restore-backup:
	lando wp --path=$(WP_PATH) db import backup.sql
	@exit 1

update-all:
	lando wp --path=$(WP_PATH) plugin update --all || $(MAKE) restore-backup

update: dry-run backup update-all db-export
	git add .
	git commit -m "update $(DATE)"
#	git push
