#my_rscript.R

args <- commandArgs(TRUE)


N <- args[1]
color <- as.character(args[2])
num <- args[3]
x <- rnorm(N,0,1)

png(filename=paste("temp", num, ".png", sep=""), width=600, height=400)

hist(x, col=args[2], xlab=N, ylab=color, main=paste(N,color,num))

dev.off()
