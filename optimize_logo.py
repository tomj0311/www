#!/usr/bin/env python3
"""
Optimize logo.png file to reduce size while maintaining quality
"""
from PIL import Image
import os

# Input and output files
input_file = 'assets/Images/logo.png'
output_file = 'assets/Images/logo_optimized.png'
backup_file = 'assets/Images/logo_original_backup.png'

# Open the image
img = Image.open(input_file)
print(f"Original image size: {os.path.getsize(input_file) / 1024:.2f} KB")
print(f"Original dimensions: {img.size}")
print(f"Original mode: {img.mode}")

# Create backup
print(f"\nCreating backup: {backup_file}")
img.save(backup_file, 'PNG')

# Optimize the image
# Method 1: Reduce to optimal size for web (if too large)
# Most logos don't need to be 1024x1024 for web display
# Let's resize to 512x512 which is still high quality for web
if img.size[0] > 512 or img.size[1] > 512:
    print("\nResizing to 512x512 for web optimization...")
    img_resized = img.resize((512, 512), Image.Resampling.LANCZOS)
else:
    img_resized = img

# Save with optimization
print(f"Saving optimized image: {output_file}")
img_resized.save(
    output_file,
    'PNG',
    optimize=True,  # Enable PNG optimization
    compress_level=9  # Maximum compression (0-9)
)

optimized_size = os.path.getsize(output_file)
print(f"\nOptimized image size: {optimized_size / 1024:.2f} KB")
print(f"Optimized dimensions: {img_resized.size}")

# Calculate reduction
original_size = os.path.getsize(input_file)
reduction = ((original_size - optimized_size) / original_size) * 100
print(f"\nSize reduction: {reduction:.1f}%")
print(f"Saved: {(original_size - optimized_size) / 1024:.2f} KB")

print("\n✓ Optimization complete!")
print(f"  Original: {backup_file}")
print(f"  Optimized: {output_file}")
print("\nTo use the optimized logo, run:")
print(f"  mv {output_file} {input_file}")
