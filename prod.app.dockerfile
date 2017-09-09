FROM thomas-henon

CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
