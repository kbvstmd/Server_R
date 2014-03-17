# my_rscript.R

library(png) 
args <- commandArgs(TRUE)
 
N <- args[1]

x <- rnorm(N,0,1)
 
png(filename=paste("temp", round(runif(1,10,1000000)),".png", sep=""), width=500, height=500)
hist(x, col="lightblue")
dev.off()
