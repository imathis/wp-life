ssh_user      = "user@host.com"    # for rsync deployment
remote_root   = "~/document_root/" # for rsync deployment

desc "push"
task :push do
  system("rsync -avz --delete . #{ssh_user}:#{remote_root}")
end